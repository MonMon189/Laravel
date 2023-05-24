@extends('layout')

@section('content')
<div class="wrapper">
        @if(Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
        @endif
       <div class="header">
            <h1 class="left"><span class="sp1"><a href="{{route('article.index')}}">Article</a></span><span class="sp2">Search</span></h1>
            <h1 class="right">
                <a href="index.php">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="sp3">Home ></span>
                </a>
                <span class="sp4">Article</span>
            </h1>
            <div class="clr"></div>
       </div> 
       <div class="list-button">
            <h2 class="button filter">
                <a href="#">
                    <span class="icon-fil">
                        <i class="fa fa-filter"></i>  
                    </span>
                    <span class="button-text">
                        Filter
                    </span>
                </a>
            </h2>
            <form class="searchform" action="{{route('search')}}" method="GET">
                <input class="keyword" type="text" name="keyword" placeholder="Enter keyword">
                <span class="searchicon">
                        <label for="search"><i class="fa fa-search" aria-hidden="true"></i></label>
                        <input class="search" id="search" name="search" type="submit" value="Search">
                </span>
            </form>
            <h2 class="button calendar">
                <a href="#">
                    <span class="icon-carl">
                        <i class="fa fa-calendar"></i>
                    </span>
                    <span class="icon-play">
                        <i class="fa fa-play fa-rotate-90"></i>
                    </span>
                </a>
            </h2>
            <h2 class="button export">
                <a href="#">
                    <span class="icon-download">
                        <i class="fa fa-download"></i>
                    </span>
                    <span class="button-text-export">
                        Export
                    </span>
                    <span class="icon-play">
                        <i class="fa fa-play fa-rotate-90"></i>
                    </span>
                </a>
            </h2>
            <h2 class="button new">
                <a href = "{{route('article.create')}}">
                    <span>
                        <span class="icon-plus">
                            <i class="fa fa-plus"></i>
                        </span>
                    </span>
                    <span class="button-text">
                         New
                    </span>
                </a>
            </h2>
            <div class="clr"></div>
       </div>
       <div class="form">
            <form action="" method="post">
                @if ($results->isEmpty())
                    <p>Không có kết quả tìm kiếm.</p>
                @else
                <table>
                    <thead>
                        <tr class="col1">
                            <td class="checkbox"><input type="checkbox"/></td>
                            <td class="id">id</td>
                            <td class="tittle"></td>
                            <td class="heading"></td>
                            <td class="image"></td>
                            <td class="detail"></td>
                            <td class="action"></td>
                        </tr>
                        <tr class="col2">
                            <td class="checkbox"></td>
                            <td class="id">
                                <a href="#">
                                    <span class="icon-play">
                                        <i class="fa fa-sort"></i>
                                    </span>
                                </a>
                            </td>
                            <td class="tittle">Title</td>
                            <td class="heading">Heading</td>
                            {{-- <td class="image">Image</td> --}}
                            <td class="detail">Details</td>
                            <td class="action">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $article)
                            <tr>
                                <td class="checkbox"><input type="checkbox"/></td>
                                <td>{{++$i}}</td>
                                <td>{{ $article->Title }}</td>
                                <td>{{ $article->Heading }}</td>
                                <td>{{ $article->Details }}</td>
                                <td>
                                    <form action="{{route('article.destroy', $article->id)}}" method="POST">
                                        <span class="btn_edit"><a href="{{route('article.edit', $article->id)}}">Sửa</a></span>
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn_delete" type="submit"><strong>Xóa</strong></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </form>
       </div>
    </div>
@endsection