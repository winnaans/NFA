// Kelas untuk kendaraan
class Kendaraan {
    constructor(nama, tipe) {
      this.nama = nama;
      this.tipe = tipe;
    }
  
    infoKendaraan() {
      return `${this.nama} (${this.tipe})`;
    }
  }
  
  // Kelas untuk pelanggan
  class Pelanggan {
    constructor(nama, nomorTelepon) {
      this.nama = nama;
      this.nomorTelepon = nomorTelepon;
      this.kendaraanDisewa = null;
    }
  
    sewaKendaraan(kendaraan) {
      this.kendaraanDisewa = kendaraan;
    }
  
    infoPelanggan() {
      return `${this.nama} - ${this.nomorTelepon} - Menyewa: ${this.kendaraanDisewa ? this.kendaraanDisewa.infoKendaraan() : 'Tidak menyewa kendaraan'}`;
    }
  }
  
  // Sistem Manajemen Penyewaan
  class SistemPenyewaan {
    constructor() {
      this.pelangganList = [];
    }
  
    tambahPelanggan(pelanggan) {
      this.pelangganList.push(pelanggan);
    }
  
    tampilkanPelanggan() {
      console.log("Daftar Pelanggan yang Menyewa Kendaraan:");
      this.pelangganList.forEach((pelanggan, index) => {
        console.log(`${index + 1}. ${pelanggan.infoPelanggan()}`);
      });
    }
  }
  
  // Contoh Penggunaan
  const kendaraan1 = new Kendaraan("Toyota Avanza", "Mobil");
  const kendaraan2 = new Kendaraan("Yamaha NMax", "Motor");
  
  const pelanggan1 = new Pelanggan("Andi", "08123456789");
  const pelanggan2 = new Pelanggan("Budi", "08234567890");
  
  pelanggan1.sewaKendaraan(kendaraan1);
  pelanggan2.sewaKendaraan(kendaraan2);
  
  const sistemPenyewaan = new SistemPenyewaan();
  sistemPenyewaan.tambahPelanggan(pelanggan1);
  sistemPenyewaan.tambahPelanggan(pelanggan2);
  
  // Menampilkan daftar pelanggan
  sistemPenyewaan.tampilkanPelanggan();
  