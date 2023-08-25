<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="/hamburger.css">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex">
            <div class="header">
    
            <!-- ハンバーガーメニュー部分 -->
                <div class="nav">
            
                    <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
                    <input id="drawer_input" class="drawer_hidden" type="checkbox">
                
                    <!-- ハンバーガーアイコン -->
                    <label for="drawer_input" class="drawer_open"><span></span></label>
                
                    <!-- メニュー -->
                    <nav class="nav_content">
                    <ul class="nav_list">
                        <li class="nav_item"><a href="{{ url('/calender') }}">ホーム</a></li>
                        <li class="nav_item"><a href="{{ url('/payment') }}">経費管理</a></li>
                        <li class="nav_item"><a href="{{ url('/camera') }}">カメラ</a></li>
                        <!--<li class="nav_item"><a href="">おしらせ</a></li>-->
                        <!--<li class="nav_item"><a href="">チャット</a></li>-->
                    </ul>
                    </nav>
        
                </div>
                <div>
                    @yield('page-name')
                </div>
            </div>
        </h2>
    </x-slot>

    @yield('child')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                広告
            </div>
        </div>
    </div>
</x-app-layout>