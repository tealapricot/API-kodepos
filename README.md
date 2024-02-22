# API-kodepos

# REST API server untuk kodepos indonesia lookup

### Stack NGINX-mariadb-php with codeigniter 4.4.2

### INSTALATION

**make sure you already install docker in your machine and point the terminal to app root directory**

`docker compose up -d`

### USAGE

mencari daerah dari kodepos

`/kodepos/(num)`

mencari daftar kode pos dari kota

`/kodepos/kota/(kota)`

mencari daftar kode pos dari kecamatan

`/kodepos/kecamatan/(kecamatan)`

mencari daftar kode pos dari desa

`/kodepos/desa/(desa)`

### PIPELINE CI/CD

menggunakan Github Action yang sudah ada di .github/workflow, yang akan otomatis menjalankan testing xdebug di kode php
