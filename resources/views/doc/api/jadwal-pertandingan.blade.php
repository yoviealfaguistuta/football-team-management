@include('frame.head')

<body data-spy="scroll" data-target="#navbar-example3" data-offset="86" data-scroll-animation="true" class="doc">
    <div class="body_wrapper">
        @include('frame.navbar-mobile')

        <section class="doc_documentation_area" id="sticky_doc">
            <div class="overlay_bg"></div>
            <div class="container custom_container">
                <div class="row">
                    <div class="col-lg-3 doc_mobile_menu display_none">
                        @include('frame.sidebar-left-desktop')
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <div id="post" class="documentation_info">
                            
                            <article class="documentation_body" id="documentation">
                                <div class="shortcode_title">
                                    <h1>Jadwal Pertandingan</h1>
                                    <p>Jadwal pertandingan berisi Endpoint untuk mengelola tabel "jadwal_pertandingan". Tabel ini berisi jadwal pertandingan yang akan atau telah diselenggarakan oleh kedua Tim.</p>
                                    <h6>Soal Nomor 3</h6>
                                    <p>
                                        Pengelolaan jadwal pertandingan antar tim. Admin perusahaan harus dapat menambahkan
                                        jadwal pertandingan antar tim, informasi jadwal pertandingan yang harus dicatat dalam
                                        aplikasi adalah: tanggal pertandingan, waktu pertandingan, tim yang bertindak sebagai tuan
                                        rumah, tim yang bertindak sebagai tamu.
                                    </p>
                                </div>
                                <div class="border_bottom"></div>
                            </article>
                            <article class="documentation_body" id="list">
                                <h4 class="c_head">List <span class="badge bg-success ml-1">GET</span></h4>
                                <div class="highlight">
                                    <pre>
                                        <code class="language-htmlasc" data-lang="html">{{ env('BASE_URL') }}/jadwal-pertandingan</code>
                                    </pre>
                                </div>
                                <p>Menampilkan daftar Jadwal Pertandingan yang terdapat pada tabel "jadwal_pertandingan"</p>
                                <a class="toggle_btn" data-toggle="collapse" href="#lVhxosIk2Q" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Response 200 OK</a>
                                <div class="collapse multi-collapse" id="lVhxosIk2Q">
                                    <div class="card card-body toggle_body"> 
                                        <div class="highlight">
                                            <pre>
                                                <code class="language-html" data-lang="html">
                                                    {
                                                        "body": {
                                                            "current_page": 1,
                                                            "data": [
                                                                {
                                                                    "id": 4,
                                                                    "tanggal": "2022-08-05",
                                                                    "waktu": "15:00",
                                                                    "id_tim_tuan_rumah": 3,
                                                                    "nama_tim_tuan_rumah": "Manchester United",
                                                                    "logo_tim_tuan_rumah": "/assets/images/data/1659684690_1200px-Manchester_United_FC_crest.svg.png",
                                                                    "id_tim_tamu": 2,
                                                                    "nama_tim_tamu": "Manchester City",
                                                                    "logo_tim_tamu": "/assets/images/data/1659684897_Manchester_City_FC_badge.svg.png"
                                                                }
                                                            ],
                                                            "first_page_url": "{{ env('BASE_URL') }}/jadwal-pertandingan?page=1",
                                                            "from": 1,
                                                            "last_page": 1,
                                                            "last_page_url": "{{ env('BASE_URL') }}/jadwal-pertandingan?page=1",
                                                            "links": [
                                                                {
                                                                    "url": null,
                                                                    "label": "&laquo; Sebelumnya",
                                                                    "active": false
                                                                },
                                                                {
                                                                    "url": "{{ env('BASE_URL') }}/jadwal-pertandingan?page=1",
                                                                    "label": "1",
                                                                    "active": true
                                                                },
                                                                {
                                                                    "url": null,
                                                                    "label": "Berikutnya &raquo;",
                                                                    "active": false
                                                                }
                                                            ],
                                                            "next_page_url": null,
                                                            "path": "{{ env('BASE_URL') }}/jadwal-pertandingan",
                                                            "per_page": 10,
                                                            "prev_page_url": null,
                                                            "to": 1,
                                                            "total": 1
                                                        },
                                                        "status": true,
                                                        "__type": "jadwal_pertandingan_list"
                                                    }
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_bottom mt-5"></div>
                            </article>
                            <article class="documentation_body" id="create">
                                <h4 class="c_head">Create <span class="badge bg-info ml-1">POST</span></h4>
                                <div class="highlight">
                                    <pre>
                                        <code class="language-htmlasc" data-lang="html">{{ env('BASE_URL') }}/jadwal-pertandingan</code>
                                    </pre>
                                </div>
                                <p>Menambahkan data Jadwal Pertandingan kedalam tabel "jadwal_pertandingan"</p>
                                <h4 class="c_head">Body (form-data)</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>id_tim_tuan_rumah</td>
                                            <td>1</td>
                                            <td>ID Tim Tuan Rumah - ['required', 'min:1', 'numeric']</td>
                                        </tr>
                                        <tr>
                                            <td>id_tim_tamu</td>
                                            <td>2</td>
                                            <td>ID Tim Tamu - ['required', 'min:1', 'numeric']</td>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>2022-08-06</td>
                                            <td>Tanggal - ['required', 'date'] - (Y-m-d)</td>
                                        </tr>
                                        <tr>
                                            <td>waktu</td>
                                            <td>15:20</td>
                                            <td>Waktu - ['required', 'string'] - (h:I)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a class="toggle_btn" data-toggle="collapse" href="#xcChsXY6Ni" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Response 200 OK</a>
                                <div class="collapse multi-collapse" id="xcChsXY6Ni">
                                    <div class="card card-body toggle_body"> 
                                        <div class="highlight">
                                            <pre>
                                                <code class="language-html" data-lang="html">
                                                    {
                                                        "body": {
                                                            "id_tim_tuan_rumah": "3",
                                                            "id_tim_tamu": "2",
                                                            "tanggal": "2022-08-05",
                                                            "waktu": "15:00",
                                                            "updated_at": "2022-08-05T07:47:32.000000Z",
                                                            "created_at": "2022-08-05T07:47:32.000000Z",
                                                            "id": 4
                                                        },
                                                        "status": true,
                                                        "__type": "jadwal_pertandingan_create"
                                                    }
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_bottom mt-5"></div>
                            </article>
                            
                            <article class="documentation_body" id="update">
                                <h4 class="c_head">Update <span class="badge bg-info ml-1">POST</span></h4>
                                <div class="highlight">
                                    <pre>
                                        <code class="language-htmlasc" data-lang="html">{{ env('BASE_URL') }}/jadwal-pertandingan/{id_jadwal_pertandingan}</code>
                                    </pre>
                                </div>
                                <p>Memperbarui data Jadwal Pertandingan yang telah ada di dalam tabel "jadwal_pertandingan" dengan yang baru</p>
                                <h4 class="c_head">Body (form-data)</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Key</th>
                                            <th>Value</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>id_tim_tuan_rumah</td>
                                            <td>1</td>
                                            <td>ID Tim Tuan Rumah - ['required', 'min:1', 'numeric']</td>
                                        </tr>
                                        <tr>
                                            <td>id_tim_tamu</td>
                                            <td>2</td>
                                            <td>ID Tim Tamu - ['required', 'min:1', 'numeric']</td>
                                        </tr>
                                        <tr>
                                            <td>tanggal</td>
                                            <td>2022-08-06</td>
                                            <td>Tanggal - ['required', 'date'] - (Y-m-d)</td>
                                        </tr>
                                        <tr>
                                            <td>waktu</td>
                                            <td>15:20</td>
                                            <td>Waktu - ['required', 'string'] - (h:I)</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a class="toggle_btn" data-toggle="collapse" href="#jQ2bC3wnEH" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Response 200 OK</a>
                                <div class="collapse multi-collapse" id="jQ2bC3wnEH">
                                    <div class="card card-body toggle_body"> 
                                        <div class="highlight">
                                            <pre>
                                                <code class="language-html" data-lang="html">
                                                    {
                                                        "body": 1,
                                                        "status": true,
                                                        "__type": "jadwal_pertandingan_update"
                                                    }
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_bottom mt-5"></div>
                            </article>

                            <article class="documentation_body" id="delete">
                                <h4 class="c_head">Delete <span class="badge bg-danger ml-1">DELETE</span></h4>
                                <div class="highlight">
                                    <pre>
                                        <code class="language-htmlasc" data-lang="html">{{ env('BASE_URL') }}/jadwal-pertandingan/{id_jadwal_pertandingan}</code>
                                    </pre>
                                </div>
                                <p>Memperbarui "soft_delete" menjadi "true", jika "soft_delete" sudah berstatus "true" maka data akan dihapus permanen</p>
                                <a class="toggle_btn" data-toggle="collapse" href="#HNHqtY5fBq" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Response 200 OK</a>
                                <div class="collapse multi-collapse" id="HNHqtY5fBq">
                                    <div class="card card-body toggle_body"> 
                                        <div class="highlight">
                                            <pre>
                                                <code class="language-html" data-lang="html">
                                                    {
                                                        "body": 1,
                                                        "status": true,
                                                        "__type": "jadwal_pertandingan_delete"
                                                    }
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                                <div class="border_bottom mt-5"></div>
                            </article>
                            @include('frame.footer')
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 doc_right_mobile_menu">
                        <div class="open_icon" id="right">
                            <i class="arrow_carrot-left"></i>
                            <i class="arrow_carrot-right"></i>
                        </div>
                        <div class="doc_rightsidebar scroll mCustomScrollbar _mCS_3"><div id="mCSB_3" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            <div id="font-switcher" class="d-flex justify-content-between align-items-center">
                                <div id="rvfs-controllers" class="fontsize-controllers group"><div class="btn-group"><a href="#" class="rvfs-decrease btn" title="Decrease font size">A-</a><a href="#" class="rvfs-reset btn disabled" title="Default font size">A</a><a href="#" class="rvfs-increase btn" title="Increase font size">A+</a></div></div>
                                <a href="javascript:window.print()" class="print"><i class="icon_printer"></i></a>
                            </div>
                            <div class="doc_switch">
                                <label for="something" class="tab-btn tab-btns"><i class="icon_lightbulb_alt"></i></label>
                                <input type="checkbox" name="something" id="something" class="tab_switcher">
                                <label for="something" class="tab-btn"><i class="far fa-moon"></i></label>
                            </div>
                            <h6>Dalam Halaman Ini:</h6>
                            <nav class="list-unstyled doc_menu" id="navbar-example3">
                                <a href="#list" class="nav-link">List</a>
                                <a href="#create" class="nav-link">Create</a>
                                <a href="#update" class="nav-link">Update</a>
                                <a href="#delete" class="nav-link">Delete</a>
                            </nav>
                        </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 223px; max-height: 240px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('frame.script')
</body>

</html>