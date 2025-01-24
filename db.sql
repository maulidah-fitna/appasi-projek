CREATE DATABASE appasi;
USE appasi;

CREATE TABLE data_siswa_x (
	no_siswa INT(4) NOT NULL,
    nisn VARCHAR(10) NOT NULL,
    nama_siswa VARCHAR(100) NOT NULL,
    jurusan VARCHAR(4) NOT NULL,
    PRIMARY KEY(nisn)
);

INSERT INTO data_siswa_x (nisn, nama_siswa, jurusan) VALUES
("276/040.21", "Azzahra Salsa Bila Putri", "PPLG"),
("277/041.21",	"Azzahratun Nur'aini", "PPLG"),
("278/042.21",	"Azzura Zahra", "PPLG"),
("279/043.21",	"Enggar Kirana Ramadhani", "PPLG"),
("280/044.21",	"Erlangga Alviant Pratama El-Badr", "PPLG"),
("281/045.21",	"Fadhil Nur Faiz", "PPLG"),
("282/046.21",	"Faizatul Alya", "PPLG"),
("283/047.21",	"Izna Ayudestika Munawaroh", "PPLG"),
("284/048.21", 	"Luthfia Zalfa Ardisyaputri", "PPLG"),
("285/049.21", 	"M Davin Berliano", "PPLG"),
("286/050.21", 	"Mega Alya Putri", "PPLG"),
("287/051.21", 	"Megananda Cristal Maliha Syisyoria S", "PPLG"),
("288/052.21", 	"Meytta Putri Nabila Gusti", "PPLG"),
("289/053.21", 	"Muflihatuddaroini", "PPLG"),
("290/054.21", 	"Muhammad Fathir Rizky Abdillah", "PPLG"),
("291/055.21",	"Muhammad Ilham Musyaffa'", "PPLG"),
("292/056.21",	"Muhammad Raihan Fuad Fakhrurrozi", "PPLG"),
("293/057.21",	"Muhammad Shalman Alfarizzi", "PPLG"),
("294/058.21",	"Nazhifah", "PPLG"),
("296/060.21",	"Nur Fauziah Eli Melsy", "PPLG"),
("297/061.21",	"Putri Agusti Nailaturrohmah", "PPLG"),
("298/062.21", 	"Reyfaldo Maulana Rosyid", "PPLG"),
("299/063.21",	"Rizky Andriano", "PPLG"),
("300/064.21",	"Shobibar Ridlwan", "PPLG"),
("301/065.21", 	"Siti Kholifah", "PPLG", "PPLG"),
("302/066.21",	"Sukma Maulida Hidayati", "PPLG"),
("303/067.21", 	"Ulya Zumrotul Muwahidah", "PPLG"),
("305/069.21", 	"Yanuharti Widhi Astuti", "PPLG"),
("306/070.21", 	"Yoshi Arwan Zullathiif", "PPLG"), 

("247/001.39",	"Abdillah Aziz"),
("249/003.39",	"Alfina Tryanor Fandhini")
("265/019.39",	"Amalizatul hammi"),
("250/004.39",	"Anggun Tyas Ayu Ramadhani"),
("251/005.39",	"Aufa Ihabi"),
("252/006.39",	"Aulia Rivya"),
("253/007.39",	"Azizatun Nafi'ah"),
("254/008.39",	"Cantika Aulia Rahma"),
("255/009.39",	"Delfinna Fitro Tuzzida"),
("258/012.39",	"Muhammad Rofiq Fatoni"),
("259/013.39",	"Nadira Alif Fatul Kholifah"),
("266/020.39",	"Nur Mufidatul Hasanah"),
("260/014.39",	"Rizka Syarifatul Maulida"),
("262/016.39",	"Shofiana Salsabyla"),
("263/017.39",	"Ulin Nihaayah"),
("263/017.39",	"Vesta Lingga Loka");

