<?php
ini_set('opcache.enable', 0);
ini_set('opcache.enable_cli', 0);
ini_set('opcache.revalidate_freq', 0);
?>
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @@parent

    <p>ここはメインのサイドバーに追加される</p>
@endsection

@section('content')
    <p>ここが本文のコンテンツ</p>
    @component('alert')
    <strong>Whoops!</strong> Something went wrong!
    @endcomponent
@endsection
