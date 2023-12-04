    <!-- Content -->
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>How to Resolved "Failed to find style 'coordinatorLayoutStyle' in current theme"</h2>
                <h5>Tutorial, September 08, 2018</h5>
                <div class="fakeimg" style="height:100%;"><img src="img/android.png" width="100%"></div>
                <p>How to Resolved "Failed to find style 'coordinatorLayoutStyle' in current theme" when you using the latest version of android studio (3.0), along with latest build tools (27) and similar API level.</p>
                <p>The layout does not get rendered in the design tab and it's causing a lot of trouble especially that when I'm using coordinator layout.</p>
                <p>How do I get around this problem?</p>
                <p>To resolved this, I solved this rendering problem by simply inserting this line into the application theme, at style.xml.</p>
            </div>
            <div class="card">
                <h2>Mengatasi Masalah Foreign Key Constraint Ketika Migrasi Database di Laravel 5.4</h2>
                <h5>Tutotrial, Juni 30, 2017</h5>
                <div class="fakeimg" style="height:100%;"><img src="img/laravel.png" width="100%"></div>
                <p>Beberapa masalah ketika melakukan migrasi database dengan perintah "php artisan migrate:refresh" atau "php artisan migrate:refresh --seed" ketika ingin memasukan beberapa sample baru yaitu sebagai berikut:</p>
                <p>
                    <ol>
                        <li>Tidak dapat membuat table dengan error "errno: 150 "Foreign key constraint is incorrectly formed".</li>
                        <li>Tidak bisa menghapus atau meng-update database dengan error "SQLSTATE[23000]: Integrity constraint violation: 1217 Cannot delete or update a parent row: a foreign key constraint fails".</li>
                    </ol>
                </p>
                <p>Solusi untuk mengatasi hal ini yaitu sebagai berikut:</p>
                <p>
                    <ul>
                        <li>Pastikan tipe data primary key dan foreign key sama.</li>
                        <li>Pastikan "urutan nama file" create table dalam direktori migrations di-sorting ascending sesuai dengan kondisi table yg memiliki primary dan foreign key, karena proses migrasi pada laravel mengeksekusi berdasarkan "urutan nama
                            file". Dahulukan file yg memiliki foreign key dengan menamai file paling awal, karena pada prinsipnya table yg didahulukan dihapus atau di-update adalah file yg memiliki foreign key.</li>
                    </ul>
                </p>
            </div>
            <div class="card">
                <h2>TITLE HEADING 3</h2>
                <h5>Title description, Sep 2, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
        <!-- Penutup Content -->
