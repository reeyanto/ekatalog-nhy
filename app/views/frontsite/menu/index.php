<!-- ... (Bagian lain dari halaman Anda) ... -->

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
    function resetSearch() {
        var menuItems = document.getElementById('menuItems');
        var resultsSection = document.getElementById('searchResults');
        resultsSection.innerHTML = ''; // Kosongkan konten hasil pencarian sebelumnya
        // Dapatkan data baju yang sudah ditampilkan
        var shownItems = document.querySelectorAll('.menu-item');

        // Ubah setiap baju yang sudah ditampilkan menjadi tidak tampil
        shownItems.forEach(function(item) {
            item.style.display = 'none';
        });

        document.getElementById('searchQuery').value = ''; // Mengatur nilai input pencarian ke kosong
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

        menuItems.innerHTML = itemsToDisplay; // Memasukkan hasil pencarian ke dalam bagian menu

        return false; // Mencegah submit form pada halaman PHP
    });
</script>
