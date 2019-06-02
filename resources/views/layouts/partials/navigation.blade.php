<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">LaraGirls</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">首頁
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('news') }}">最新消息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('posts') }}">部落格</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('jobs') }}">職缺徵才</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('projects') }}">社群作品</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
