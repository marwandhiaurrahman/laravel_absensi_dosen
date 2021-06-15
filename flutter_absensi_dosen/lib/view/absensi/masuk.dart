import 'dart:async';

import 'package:flutter/material.dart';
import 'package:flutter_absensi_dosen/controller/api_controller.dart';
import 'package:flutter_absensi_dosen/model/jadwal.dart';
import 'package:flutter_absensi_dosen/view/dashboard/index.dart';
import 'package:permission_handler/permission_handler.dart';
import 'package:responsive_size/responsive_size.dart';
import 'package:qrscan/qrscan.dart' as scanner;
import 'package:geolocator/geolocator.dart';
import 'package:intl/intl.dart';

class AbsensiMasuk extends StatefulWidget {
  final Matkul matkul;
//   final int index;
  const AbsensiMasuk({this.matkul});
  @override
  _AbsensiMasukState createState() => _AbsensiMasukState();
}

class _AbsensiMasukState extends State<AbsensiMasuk> {
  void _getTime() {
    final DateTime now = DateTime.now();
    final String formattedDateTime = _formatDateTime(now);
    setState(() {
      _timeString = formattedDateTime;
    });
  }

  String _formatDateTime(DateTime dateTime) {
    return DateFormat('MM/dd/yyyy HH:mm:ss').format(dateTime);
  }

  String _timeString;

  Future _scan() async {
    await Permission.camera.request();
    _getLocation();
    String barcode = await scanner.scan();
    if (barcode == null) {
      print('nothing return.');
    } else {
      setState(() {
        output = barcode;
        print(barcode);
      });
    }
  }

  void _requestPermissionLocation() async {
    await Permission.locationAlways.request().then((value) => {
          setState(() {
            _permissionLocation = value.toString();
          })
        });
  }

  void _getLocation() async {
    _requestPermissionLocation();
    await Geolocator.getCurrentPosition().then((value) => {
          setState(() {
            _akurasiLokasi = value.accuracy;
            latitude = value.latitude;
            longitude = value.longitude;
            jarak = Geolocator.distanceBetween(
                -6.9699184274322175, 108.52827343642505, latitude, longitude);
          })
        });
  }

  void _uploadAbsensi() {
    apiController.absensimasuk(DateTime.now().toString(), metode,
        pembahasanController.text, widget.matkul.id, latitude, longitude);
    Navigator.pushAndRemoveUntil(
        context,
        MaterialPageRoute(builder: (context) => DashboardView()),
        (Route<dynamic> route) => false);
  }

  ApiController apiController = ApiController();

  String output;
  String _permissionLocation = 'Belum Scan Absensi';
  double _akurasiLokasi = 0;
  double latitude = 0;
  double longitude = 0;
  double jarak = 0;
  String metode;
  final pembahasanController = TextEditingController();

  @override
  void initState() {
    _timeString = _formatDateTime(DateTime.now());
    // Timer.periodic(Duration(seconds: 1), (Timer t) => _getTime());
    super.initState();
  }

  @override
  void dispose() {
    pembahasanController.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    const itemsMenu = <String>[
      'Tatap Muka',
      'E-Class',
    ];

    ResponsiveSize.init(
        designWidth: MediaQuery.of(context).size.width,
        designHeight: MediaQuery.of(context).size.height);
    return Scaffold(
      appBar: AppBar(
        title: Text('Absensi Masuk'),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            Card(
                child: Container(
              width: double.infinity,
              padding: EdgeInsets.all(spBlock * 1),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Text('Pertemuan ke '),
                  Text('Mata Kuliah : ' + widget.matkul.name),
                  Text('Kode : ' + widget.matkul.kode),
                  Text('Dosen : ' + widget.matkul.dosen.name),
                  Text('Tanggal : ' + _timeString),
                  //   Text('Tanggal : 12 Januari 2021'),
                ],
              ),
            )),
            Card(
                child: Container(
              width: double.infinity,
              padding: EdgeInsets.all(spBlock * 1),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  TextFormField(
                    controller: pembahasanController,
                    maxLines: 2,
                    textInputAction: TextInputAction.next,
                    decoration: InputDecoration(
                        border: OutlineInputBorder(
                          borderRadius: const BorderRadius.all(
                            const Radius.circular(10.0),
                          ),
                        ),
                        filled: true,
                        labelText: 'Pembahasan',
                        hintStyle: TextStyle(color: Colors.grey[800]),
                        hintText: "Masukan Pembahasan",
                        fillColor: Colors.white70),
                  ),
                  Container(
                    margin: EdgeInsets.symmetric(
                      vertical: 10,
                    ),
                    width: double.infinity,
                    decoration: ShapeDecoration(
                      shape: RoundedRectangleBorder(
                        side: BorderSide(width: 1.0, style: BorderStyle.solid),
                        borderRadius: BorderRadius.all(Radius.circular(10.0)),
                      ),
                    ),
                    child: DropdownButtonHideUnderline(
                      child: Container(
                        margin: EdgeInsets.only(left: 10.0, right: 10.0),
                        child: DropdownButton<String>(
                          hint: Text('Pilih Metode'),
                          value: metode,
                          items: itemsMenu.map((String value) {
                            return DropdownMenuItem<String>(
                              value: value,
                              child: Text(value),
                            );
                          }).toList(),
                          onChanged: (value) {
                            setState(() {
                              metode = value;
                            });
                          },
                        ),
                      ),
                    ),
                  ),
                ],
              ),
            )),
            Card(
                child: Container(
              width: double.infinity,
              padding: EdgeInsets.all(spBlock * 1),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  (output == null)
                      ? Text('Ruangan : Belum Melakukan Scan')
                      : Text('Ruangan : ' + output),
                  Text(_permissionLocation),
                  Text('Latitude : ' + latitude.toString()),
                  Text('Longitude : ' + longitude.toString()),
                  Text('Jarak : ' + jarak.ceilToDouble().toString() + ' meter'),
                  Text('Akurasi : ' +
                      (100 - _akurasiLokasi.ceilToDouble()).toString() +
                      ' %'),
                ],
              ),
            )),
            Container(
              width: double.infinity,
              child: Card(
                color: Colors.transparent,
                elevation: 0,
                child: ElevatedButton(
                  onPressed: () {
                    _scan();
                  },
                  child: Text('Scan'),
                  style: ElevatedButton.styleFrom(
                      primary: Colors.amber, onPrimary: Colors.black),
                ),
              ),
            ),
            (output == null)
                ? Text('Silahkan scan barcode absensi dikelas')
                : Container(
                    width: double.infinity,
                    child: Card(
                      color: Colors.transparent,
                      elevation: 0,
                      child: ElevatedButton(
                        onPressed: () {
                          _uploadAbsensi();
                        },
                        child: Text('Upload'),
                        style: ElevatedButton.styleFrom(
                          primary: Colors.lightGreen,
                        ),
                      ),
                    ),
                  )
          ],
        ),
      ),
    );
  }
}
