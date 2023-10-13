@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')
<div class="category_alert">
    @if(session('message'))
    <div class="category_alert--success">
        {{ session('message') }}
    </div>
    @endif
    @if($errors->any())
    <div class="category_alert--danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="category_content">
    <form action="/categories/store" method="post" class="create-form">
        @csrf
        <div class="create-form_inner">
            <div class="create-form_item">
                <input class="create-form_item-input" type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="create-form_button">
                <button class="create-form_button-submit" type="submit">作成</button>
            </div>
        </div>
        <div class="category-table">
            <table class="category-table_inner">
                <tr class="category-table_row">
                    <th class="category-table_header">category</th>
                </tr>
                @foreach($categories as $category)
                <tr class="category-table_row">
                    <td class="category-table_item">
                        <form action="/categories/update" method="POST" class="update-form">
                            @method('PATCH')
                            @csrf
                            <div class="update-form_item">
                                <input class="update-form_item-input" type="text" name="name" value="{{ $category['name'] }}">
                                <input type="hidden" name="id" value="{{ $category['id'] }}">
                            </div>
                            <div class="update-form_button">
                                <button class="update-form_button-submit" type=""submit>更新</button>
                            </div>
                        </form>
                    </td>
                    <td class="category-table_item">
                        <form action="/categories/delete" method="post" class="delete-form">
                            @method('DELETE')
                            @csrf
                            <div class="delete-form_button">
                                <input type="hidden" name="id" value="{{ $category['id'] }}">
                                <button class="delete-form_button-submit" type="submit">削除</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </form>
</div>
@endsection