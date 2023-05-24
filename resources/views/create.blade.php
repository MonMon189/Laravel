@extends('layout')

@section('content')
    <div class="create_wrapper">
        <div class="header">
            <h1>
                <span class="article"><a href="{{route('article.index')}}">Article</a></span>
                <span class="create">Create</span>
                <div class="clr"></div>
            </h1>
        </div>
        <div class="content">
            <h2>Create</h2>
            <div class="form">
                <form action="{{route ('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                        <tr class="row1">
                            <td class="col1">
                                <label class="label" for="title">Title</label>
                            </td>
                            <td class="col2">
                            <div class="line">
                                <span class="create_icon">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                <input class="create_input" type="text" value="" id="title" name="title">
                            </div>
                            </td>        
                        </tr>
                        <tr class="row2">
                            <td class="col1">
                                <label class="label" for="heading">Heading</label>
                            </td>
                            <td class="col2">
                                <div class="line">
                                    <span class="create_icon">
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                    <input class="create_input" type="text" value="" id="heading" name="heading">
                                </div>
                            </td>        
                        </tr>
                        {{-- <tr class="row4">
                            <td class="col1">
                                <label class="label" for="image">Image</label>
                            </td>
                            <td class="col2">
                                <div class="line">
                                    <span class="icon">
                                        <i class="fas fa-pencil-alt"></i>
                                    </span>
                                    <input class="input" type="file" value="" id="image" name="image" accept="image/*">
                                </div>
                            </td>        
                        </tr> --}}
                        <tr class="row3">
                            <td class="col1">
                                <label for="details">Details</label>
                            </td>
                            <td class="col2 td3">
                                <textarea name="details" id="details" cols="" rows="10" class="details"></textarea>
                            </td>        
                        </tr>
                        <tr class="table2-tr1">
                            <td class="table2-td1" colspan="2">
                                <input class="button reset" type="reset" value="Reset" name="reset">
                                <input type="checkbox" name="view" id="view">View
                                <input type="checkbox" name="view" id="creating">Continue creating
                                <input type="checkbox" name="view" id="reading">Continue reading
                                <input class="button submit" type="submit" value="Submit" name="submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection