<aside class="doc_left_sidebarlist">
    <div class="open_icon" id="left">
        <i class="arrow_carrot-right"></i>
        <i class="arrow_carrot-left"></i>
    </div>
    <div class="scroll">
        <ul class="list-unstyled nav-sidebar">
            <li class="nav-item">
                <a href="{{ route('/') }}" class="nav-link"><img src="{{ url('img') }}/side-nav/home.png" alt="">Getting Started</a>
            </li>
            <li class="nav-item active">
                <a href="#" class="nav-link"><img src="{{ url('img') }}/side-nav/briefcase.png" alt="briefcase">API</a>
                <span class="icon"><i class="arrow_carrot-down"></i></span>
                <ul class="list-unstyled dropdown_nav">
                    <li><a href="{{ route('studi-kasus') }}">Studi Kasus</a></li>
                    <li><a href="{{ route('authentication') }}">Authentication</a></li>
                    <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
                    <li><a href="{{ route('tim') }}">Tim</a></li>
                    <li><a href="{{ route('pemain') }}">Pemain</a></li>
                    <li><a href="{{ route('jadwal-pertandingan') }}">Jadwal Pertandingan</a></li>
                    <li><a href="{{ route('hasil-pertandingan') }}">Hasil Pertandingan</a></li>
                    <li><a href="{{ route('report') }}">Report</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a target="_blank" download rel="noreferrer" href="{{ url('Ayo Indonesia - Software Developer Technical Test.postman_collection.json') }}" class="nav-link"><img src="{{ url('img') }}/side-nav/document.png" alt="">Postman Collection</a>
            </li>
            <li class="nav-item">
                <a target="_blank" download rel="noreferrer" href="{{ url('https://github.com/yoviealfaguistuta/backend-football-team-management') }}" class="nav-link"><img src="{{ url('img') }}/side-nav/chat1.png" alt="">Github</a>
            </li>
            <li class="nav-item">
                <a target="_blank" download rel="noreferrer" href="{{ url('http://yoviealfaguistuta.site/') }}" class="nav-link"><img src="{{ url('img') }}/side-nav/coding.png" alt="">Portofolio</a>
            </li>
        </ul>
    </div>
</aside>