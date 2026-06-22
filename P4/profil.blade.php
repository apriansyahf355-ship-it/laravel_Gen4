@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@push('styles')
<style>
    .profile-wrapper {
        max-width: 680px;
        margin: 0 auto;
    }

    /* ── Page heading ──────────────────────────────── */
    .page-heading {
        margin-bottom: 28px;
    }

    .page-heading h1 {
        font-size: 1.6rem;
        color: #1a1a2e;
    }

    .page-heading h1 span { color: #FF2D20; }

    .page-heading p {
        color: #999;
        font-size: .88rem;
        margin-top: 4px;
    }

    /* ── Card ──────────────────────────────────────── */
    .card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(0,0,0,.07);
        overflow: hidden;
    }

    /* top accent bar */
    .card-top {
        height: 6px;
        background: linear-gradient(90deg, #FF2D20, #e94560);
    }

    /* avatar + nama blok */
    .card-hero {
        background: #1a1a2e;
        padding: 32px 40px;
        display: flex;
        align-items: center;
        gap: 24px;
    }

    .avatar {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: #FF2D20;
        color: #fff;
        font-size: 1.8rem;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border: 3px solid rgba(255,255,255,.15);
    }

    .hero-info h2 {
        color: #fff;
        font-size: 1.25rem;
        margin-bottom: 6px;
    }

    .badge {
        display: inline-block;
        background: rgba(255,45,32,.2);
        color: #FF2D20;
        font-size: .78rem;
        font-weight: 600;
        padding: 3px 12px;
        border-radius: 99px;
        letter-spacing: .4px;
        border: 1px solid rgba(255,45,32,.3);
    }

    /* data table */
    .card-body {
        padding: 0 40px 32px;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 28px;
    }

    .data-table tr {
        border-bottom: 1px solid #f0f2f5;
    }

    .data-table tr:last-child { border-bottom: none; }

    .data-table td {
        padding: 14px 0;
        vertical-align: middle;
    }

    .label-col {
        width: 40%;
        font-size: .82rem;
        color: #999;
        text-transform: uppercase;
        letter-spacing: .5px;
        font-weight: 500;
    }

    .sep-col {
        width: 5%;
        color: #ccc;
        font-weight: 300;
    }

    .value-col {
        font-size: .97rem;
        font-weight: 600;
        color: #1a1a2e;
    }

    .value-highlight { color: #FF2D20; }
</style>
@endpush

@section('content')
<div class="profile-wrapper">

    <div class="page-heading">
        <h1>Profil <span>Mahasiswa</span></h1>
        <p>Informasi lengkap data mahasiswa</p>
    </div>

    <div class="card">
        <div class="card-top"></div>

        {{-- Hero section --}}
        <div class="card-hero">
            <div class="avatar">
                {{ strtoupper(substr($profil['nama'], 0, 1)) }}
            </div>
            <div class="hero-info">
                <h2>{{ $profil['nama'] }}</h2>
                <span class="badge">{{ $profil['program_studi'] }}</span>
            </div>
        </div>

        {{-- Data section --}}
        <div class="card-body">
            <table class="data-table">
                <tr>
                    <td class="label-col">Nama</td>
                    <td class="sep-col">:</td>
                    <td class="value-col">{{ $profil['nama'] }}</td>
                </tr>
                <tr>
                    <td class="label-col">NIM</td>
                    <td class="sep-col">:</td>
                    <td class="value-col value-highlight">{{ $profil['nim'] }}</td>
                </tr>
                <tr>
                    <td class="label-col">Program Studi</td>
                    <td class="sep-col">:</td>
                    <td class="value-col">{{ $profil['program_studi'] }}</td>
                </tr>
                <tr>
                    <td class="label-col">Semester</td>
                    <td class="sep-col">:</td>
                    <td class="value-col">{{ $profil['semester'] }}</td>
                </tr>
                <tr>
                    <td class="label-col">Hobi</td>
                    <td class="sep-col">:</td>
                    <td class="value-col">{{ $profil['hobi'] }}</td>
                </tr>
            </table>
        </div>
    </div>

</div>
@endsection
