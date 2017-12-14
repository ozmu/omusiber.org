@extends('layouts.docs')
@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.datatables.min.css')}}"/>
@endpush
@push('scripts')
<script type="text/javascript" src="{{asset('assets/js/jquery.datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/members.js')}}"></script>
@endpush

@section('content')
    <table id="members" class="display" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>İsim</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Ünvan</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>İsim</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Ünvan</th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td>Muhammet Öztürk</td>
            <td>ozturkmuhammeet@gmail.com</td>
            <td>+905384952246</td>
            <td>Başkan</td>
        </tr>
        <tr>
            <td>Test asisaşj</td>
            <td>ozturkmuhammeet@gmail.com</td>
            <td>+905384952246</td>
            <td>Başkan</td>
        </tr>
        <tr>
            <td>Abasdasdsaşd</td>
            <td>ozturkmuhammeet@gmail.com</td>
            <td>+905384952246</td>
            <td>Başkan</td>
        </tr>
        <tr>
            <td>Ceşajşkahsd</td>
            <td>ozturkmuhammeet@gmail.com</td>
            <td>+905384952246</td>
            <td>Başkan</td>
        </tr>
        <tr>
            <td>Muhammet Öztürk</td>
            <td>ozturkmuhammeet@gmail.com</td>
            <td>+905384952246</td>
            <td>Başkan</td>
        </tr>
        </tbody>
    </table>
@endsection