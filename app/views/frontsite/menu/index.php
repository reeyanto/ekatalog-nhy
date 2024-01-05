<!-- ======= Search Bar Section ======= -->
<!-- ... (Bagian lain dari halaman Anda) ... -->

<!-- ... (Bagian lain dari halaman Anda) ... -->
<script>
    function resetSearch() {
        var menuItems = document.getElementById('menuItems');
        var originalItems = '<div class="horizontal">'; // Buka div horizontal di sini

        // Tambahkan kembali semua item menu ke dalam variable originalItems
        <?php foreach ($data['produk'] as $row) : ?>
            originalItems += `
                <div class="col-lg-4 menu-item">            
                        <img src="<?= BASEURL . "/frontsite/detail/index/" . $row['foto']; ?>" style="width: 250px;">
                    </a>
                    <p class="name">
                        <?= $row['nama']; ?>
                    </p>
                    <p class="ingredients">
                        <?= $row['deskripsi']; ?>
                    </p>
                    <p class="price">
                        <?= $row['harga']; ?>
                    </p>
                </div>`;
        <?php endforeach; ?>    

        originalItems += '</div>'; // Tutup div horizontal di sini

        menuItems.innerHTML = originalItems; // Memasukkan kembali semua item menu ke dalam bagian menu

        document.getElementById('searchQuery').value = ''; // Mengatur nilai input pencarian ke kosong
    }
</script>

<style>
    .horizontal {
        display: flex;
        flex-wrap: wrap; /* Untuk memastikan item-item tersebut akan turun ke baris bawah jika tidak cukup ruang */
        justify-content: space-between; /* Untuk memberikan ruang antara item-itemnya */
    }
    .menu-item {
        width: calc(33.33% - 10px); /* Untuk mengatur lebar setiap item */
        margin-bottom: 20px; /* Untuk memberikan ruang antara baris */
    }
</style>



<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2></h2>
            <p>Check Our <span>Butik Menu</span></p>
        </div>

   <!-- ======= Search Bar Section ======= -->
<section id="search" class="search">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Search</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form id="searchForm">
                    <div class="input-group">
                        <input type="text" class="form-control" id="searchQuery" placeholder="cari baju..." name="query">
                        <button class="btn btn-primary" type="submit">Search</button>
                        <button class="btn btn-secondary" type="button" onclick="resetSearch()">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ======= Search Bar Section ======= -->
<section id="searchResults" class="search">
    <!-- Konten hasil pencarian... -->
</section>
<!-- Hasil pencarian ke samping -->
<div class="container">
    <div class="row" id="menuItems">
        <!-- Tempat untuk menampilkan hasil pencarian -->
    </div>
</div>
<script>
    var originalItems = ''; // Variabel untuk menyimpan hasil tampilan awal
   
    // Simpan hasil tampilan awal pada saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        var menuItems = document.getElementById('menuItems');
        originalItems = menuItems.innerHTML; // Simpan hasil tampilan awal
    });
</script>
<div id="separator" style="width: 100%; border-bottom: 1px solid #ccc; margin-bottom: 20px;"></div>
<script>
    function resetSearch() {
        var searchQuery = document.getElementById('searchQuery');
        searchQuery.value = ''; // Membersihkan nilai input pencarian
        
        // Menampilkan kembali hasil tampilan awal
        var menuItems = document.getElementById('menuItems');
        menuItems.innerHTML = originalItems;

        // Menyembunyikan garis pemisah
        var separator = document.getElementById('separator');
        separator.style.display = 'none';
    }
</script>
            <!-- Item menu akan ditampilkan di sini -->
            <div class="horizontal">
            <?php $count = 0; ?>
            <?php foreach ($data['produk'] as $row) : ?>
                <div class="col-lg-4 menu-item">
                    <a href="/public/assets/frontsite/img/foto_profile/" class="glightbox">
                        <img src="<?= BASEURL . "/public/assets/frontsite/img/foto_profile/" . $row['foto']; ?>" style="width: 250px;">
                    </a>
                    <p class="name">
                        <?= $row['nama']; ?>
                    </p>
                    <p class="ingredients">
                        <?= $row['deskripsi']; ?>
                    </p>
                    <p class="price">
                        <?= $row['harga']; ?>
                    </p>
                </div>
                <style>
  .horizontal {
    display: flex;
  }
</style>
                <?php $count++; ?>
            <?php endforeach; ?>    
        </div>
    </div>
</section>

<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah halaman untuk melakukan refresh saat submit

        // Ambil nilai dari input pencarian
        var query = document.getElementById('searchQuery').value.toLowerCase();

        // Loop melalui setiap item pada menu dan tampilkan/masukkan ke dalam menuItems sesuai dengan query
        var menuItems = document.getElementById('menuItems');
        var itemsToDisplay = '';
        var nameElements = document.querySelectorAll('.name'); // Ambil semua elemen dengan kelas 'name'

        nameElements.forEach(function(element) {
            var nameText = element.textContent.toLowerCase(); // Ambil teks dari elemen 'name'

            if (nameText.includes(query)) {
                // Jika teks yang dicari ada dalam teks 'name', masukkan elemen ke dalam hasil pencarian
                itemsToDisplay += element.parentElement.outerHTML; // Ambil elemen induk untuk ditampilkan
            }
        });

                if (itemsToDisplay !== '') {
                // Menampilkan hasil pencarian jika ada
                menuItems.innerHTML = itemsToDisplay;

                // Menampilkan garis pemisah
                var separator = document.getElementById('separator');
                separator.style.display = 'block';
            } else {
                // Jika tidak ada hasil pencarian, kembalikan tampilan ke hasil awal
                menuItems.innerHTML = originalItems;

                // Sembunyikan garis pemisah
                var separator = document.getElementById('separator');
                separator.style.display = 'none';
            }
             // Tambahkan teks "Mungkin Anda Juga Suka" setelah hasil pencarian yang ditemukan
            if (itemsToDisplay !== '') {
                itemsToDisplay += '<div style="text-align: center; margin-top: 50px;">Mungkin Anda Juga Suka</div>';
            }

            menuItems.innerHTML = itemsToDisplay; // Memasukkan hasil pencarian ke dalam bagian menu


            return false; // Mencegah submit form pada halaman PHP

        // menuItems.innerHTML = itemsToDisplay; // Memasukkan hasil pencarian ke dalam bagian menu

        // return false; // Mencegah submit form pada halaman PHP
    });
</script>
