@php
$title = 'お問い合わせ - 完了';
@endphp

@extends('layout')

@section('content')
        <h1 class="text-center mt-2 mb-5">ご意見いただきありがとうございました。</h1>
        <a href="{{ route('contact') }}" class="btn btn-primary">トップページへ</a>
@endsection