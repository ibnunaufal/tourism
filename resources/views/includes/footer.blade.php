<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h3>Butuh bantuan?</h3>
            <a href="tel://089524621666" id="phone">+62 895 2462 1666</a>
            <a href="wa.me/6281225951789" id="phone">+62 895 2462 1666 (WA)</a>
            <a href="mailto:help@dolansalatiga.com" id="email_footer">help@dolansalatiga.com</a>
        </div>
        <div class="col-md-2">
            <h3>Destinasi</h3>
            <ul>
                <li><a href="/destinasi"><i class="icon_set_1_icon-24"></i> Semua Destinasi</a></li>
                <li><a href="/destinasi"><i class="icon_set_1_icon-24"></i> Alam</a></li>
                <li><a href="/destinasi"><i class="icon_set_1_icon-50"></i> Belanja</a></li>
                <li><a href="/destinasi"><i class="icon_set_1_icon-44"></i> Budaya</a></li>
                <li><a href="/destinasi"><i class="icon_set_1_icon-40"></i> Olahraga</a></li>
                <li><a href="/destinasi"><i class="icon_set_1_icon-3"></i> Rekreasi</a></li>
                <li><a href="/destinasi"><i class="icon_set_1_icon-2"></i> Religi</a></li>
                <li><a href="/destinasi"><i class="icon_set_1_icon-4"></i> Sejarah</a></li>
            </ul>
        </div>
        <div class="col-md-2">
            <h3>Akomodasi</h3>
            <ul>
                <li><a href="/akomodasi"><i class="icon_set_1_icon-23"></i> Semua Akomodasi</a></li>
                <li><a href="/akomodasi"><i class="icon_set_2_icon-104"></i> Hotel</a></li>
                <li><a href="/akomodasi"><i class="icon_set_2_icon-114"></i> Wisma</a></li>
            </ul>
            <h3>Kuliner</h3>
            <ul>
                <li><a href="/kuliner"><i class="icon_set_1_icon-58"></i> Semua Kuliner</a></li>
                <li><a href="/kuliner"><i class="icon_set_3_restaurant-5"></i> Tradisional</a></li>
                <li><a href="/kuliner"><i class="icon_set_3_restaurant-11"></i> Restoran</a></li>
            </ul>
        </div>

        <div class="col-md-2">
            <h3>Fasilitas Umum</h3>
            <ul>
                <li><a href="/fasum"><i class="icon_set_1_icon-24"></i> Semua Fasilitas Umum</a></li>
                <!-- <li><a href="/fasum"><i class="icon_set_1_icon-12"></i> Toilet</a></li> -->
                <li><a href="/fasum"><i class="icon_set_1_icon-7"></i> Wifi</a></li>
                <li><a href="/fasum"><i class="icon_set_1_icon-26"></i> Halte</a></li>
                <li><a href="/fasum"><i class="icon_set_1_icon-24"></i> SPBU</a></li>
                <li><a href="/fasum"><i class="icon_set_1_icon-35"></i> ATM</a></li>
                <li><a href="/fasum"><i class="icon_set_1_icon-24"></i> Rumah Sakit</a></li>
                <li><a href="/fasum"><i class="icon_set_2_icon-105"></i> Kantor Polisi</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>Acara</h3>
            <ul>
                <li><a href="/fullcalender"><i class="icon_set_1_icon-53"></i> Kalender</a></li>
            </ul>
            @if (Auth::guest())
            <h3>Fasilitas Umum</h3>
            <ul>
                <li><a href="/login"><i class="icon-login-2"></i> Login</a></li>
            </ul>
            @endif
            @if (Auth::check())
            <h3>Admin Page</h3>
            <ul>
                <li><a href="/admin"><i class="icon-user-2"></i> Admin Page</a></li>
                <li><a href="/destinasi/admin"><i class="icon_set_1_icon-24"></i> Detail Destinasi</a></li>
                <li><a href="/akomodasi/admin"><i class="icon_set_1_icon-23"></i> Detail Akomodasi</a></li>
                <li><a href="/kuliner/admin"><i class="icon_set_1_icon-58"></i> Detail Kuliner</a></li>
                <li><a href="/acara/admin"><i class="icon_set_1_icon-87"></i> Detail Acara</a></li>
                <li><a href="/fasum/admin"><i class="icon_set_1_icon-24"></i> Detail Fasilitas Umum</a></li>
                <li><a href="/actionlogout"><i class="icon-logout"></i> Logout</a></li>
            </ul>
            @endif
        </div>
        <!-- <div class="col-md-2">
            <h3>Settings</h3>
            <div class="styled-select">
                <select name="lang" id="lang">
                    <option value="English" selected>English</option>
                    <option value="French">French</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Russian">Russian</option>
                </select>
            </div>
            <div class="styled-select">
                <select name="currency" id="currency">
                    <option value="USD" selected>USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                    <option value="RUB">RUB</option>
                </select>
            </div>
        </div> -->
    </div><!-- End row -->
    <div class="row">
        <div class="col-md-12">
            <div id="social_footer">
                <ul>
                    <li><a href="https://id-id.facebook.com/PemkotSalatiga/"><i class="icon-facebook"></i></a></li>
                    <li><a href="https://twitter.com/pemkotsalatiga"><i class="icon-twitter"></i></a></li>
                    <!-- <li><a href="#"><i class="icon-google"></i></a></li> -->
                    <li><a href="https://www.instagram.com/pemkotsalatiga/?hl=id"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-vimeo"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC0VwH0UcyIfpWZjVu0N1LyQ"><i class="icon-youtube-play"></i></a></li>
                </ul>
                <p>- 2022 -</p>
            </div>
        </div>
    </div><!-- End row -->
</div><!-- End container -->