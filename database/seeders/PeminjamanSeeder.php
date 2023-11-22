<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Hapus semua data yang ada di tabel peminjaman
        DB::table('peminjamans')->truncate();

        // Isi data dummy dengan Faker
        foreach (range(1, 10) as $index) {
            Peminjaman::create([
                'ruang_id' => $faker->numberBetween(1, 5), // Ganti dengan ID ruang yang sesuai
                'nama_peminjam' => $faker->name,
                'tanggal_peminjaman' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'tanggal_pengembalian' => $faker->dateTimeBetween('+2 days', '+10 days'),
            ]);
        }
    }
}
