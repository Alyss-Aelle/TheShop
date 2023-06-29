
@extends('layouts.theshop')
@section('main')
<x-list.products :products="$products"/>
@endsection