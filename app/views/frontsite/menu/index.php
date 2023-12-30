<main id="main">
   
<!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
          <p>Check Our <span>yumme Menu</span></p>
        </div>

        <!DOCTYPE html>
<html>
<head>
    <title>Frontsite</title>
</head>
<body>
    <div id="gambarContainer"></div>

    <script>
        // Ambil data gambar dari API di backsite
        fetch('http://localhost/assets/frontsite/img')
            .then(response => response.json())
            .then(data => {
                const gambarContainer = document.getElementById('gambarContainer');

                // Loop melalui data dan tampilkan gambar-gambar
                data.gambar.forEach(gambar => {
                    const img = document.createElement('img');
                    img.src = gambar.url;
                    img.alt = gambar.judul;

                    // Tambahkan ke dalam container di frontsite
                    gambarContainer.appendChild(img);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>

              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->