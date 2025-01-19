<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dokumen Digital PLN</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('halaman_data_aset/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar" style="background-color: #14a2ba;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 font-inter" href="#" style="color: #fff;">
            <img src="{{ asset('halaman_data_aset/assets/img/Logo_PLN.png') }}" width="40" height="50" alt="" class="d-inline-block align-text-center">
            PT PLN (Persero) UP3 Pinrang
         </a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: #125D72;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" style="color: #fff;">Menu</div>
                            <a class="nav-link" href="{{ route('home') }}" style="color: #fff;">
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#collapseDataAset" aria-expanded="false" aria-controls="collapseDataAset">
                                Data Aset
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                            </a>
                            <div class="collapse" id="collapseDataAset" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('DataAsetGardu') }}" style="color: #fff;">Data Aset Gardu</a>
                                    <a class="nav-link" href="#" style="color: #fff;">Data Aset JTR</a>
                                    <a class="nav-link" href="#" style="color: #fff;">Data Aset JTM</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#collapseBeritaAcara" aria-expanded="false" aria-controls="collapseBeritaAcara">
                                Berita Acara
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                            </a>
                            <div class="collapse" id="collapseBeritaAcara" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionBeritaAcara">
                                    <a class="nav-link collapsed" href="#" style="color: #fff;" data-bs-toggle="collapse" data-bs-target="#beritaacaraCollapsePengoperasian" aria-expanded="false" aria-controls="beritacaraCollapsePengoperasian">
                                        Berita Acara Pengoperasian
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: #fff;"></i></div>
                                    </a>
                                    <div class="collapse" id="beritaacaraCollapsePengoperasian" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionBeritaAcara">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#" style="color: #fff;">Gardu</a>
                                            <a class="nav-link" href="#" style="color: #fff;">JTR dan JTM</a>
                                        </nav>
                                    </div>
                                </div>
                            <a class="nav-link" href="{{ route('logout') }}" style="color: #fff;">
                                Log out
                            </a>
                        </div>
                    </div>
                    <!--<div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div-->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color: #14a2ba;">Data Aset Gardu PT PLN (Persero) UP3 Pinrang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Aset Gardu</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body fw-semi-bold" style="color: #125D72;">
                                Halaman data aset merupakan sekumpulan data aset yang dimiliki PT PLN (Persero) UP3 Pinrang
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header d-flex  align-items-center justify-content-between fw-bold">
                                Tabel Data Aset Gardu 
                                <a href="{{ route('DataAsetGardu.create') }}" class="btn btn-group btn-primary rounded submit px-1 float-end" margin="right" style="background-color:#14A2BA; color:#fff;">Tambah Data</a>
                            </div>
                            @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            <form action="{{ route('DataAsetGardu.search') }}" method="get">
                            <div class="input-group mt-3 mb-4">
                                <input type="text" name="query" class="form-control" placeholder="Cari Data Aset Gardu..." value="{{ request()->input('query') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" style="background-color: #125d72;">Cari</button>
                                </div>
                            </div>
                        </form>
                            <div class="table-responsive">
                                <table class="table" id="dataasetGarduTable">
                                    <thead>
                                        <tr class="align-items-center" style="background-color: #e7f6f9; color: #125d72;">
                                            <th>No</th>
                                            <th>Nama Gardu Baru</th>
                                            <th>ULP</th>
                                            <th>Id_Transpower</th>
                                            <th>Phasa Internal</th>
                                            <th>Lokasi(APKT)</th>
                                            <th>Penyulang</th>
                                            <th>Keypoint</th>
                                            <th>Section</th>
                                            <th>Segment</th>
                                            <th>Latitude</th>
                                            <th>Longitude</th>
                                            <th>Merk GD</th>
                                            <th>Spec_Transtap</th>
                                            <th>Spec_Voltage</th>
                                            <th>Spec_Current</th>
                                            <th>Spec_Year</th>
                                            <th>Spec_Wiring</th>
                                            <th>Spec_Mineraloil</th>
                                            <th>Spec_CoolingType</th>  
                                            <th>Spec_Oilweight</th>  
                                            <th>Spec_Transweight</th>    
                                            <th>Test Earth</th> 
                                            <th>Opsi</th>                                   
                                        </tr>
                                    </thead>
                                        <tbody>
                                            @if ($data_aset_gardu->count() > 0)
                                            @foreach ($data_aset_gardu as $rs)
                                            <tr>
                                                <td class="align-middle">{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $rs->name }}</td>
                                                <td class="align-middle">{{ $rs->ulp }}</td>
                                                <td class="align-middle">{{ $rs->id_transpower }}</td>
                                                <td class="align-middle">{{ $rs->phase }}</td>
                                                <td class="align-middle">{{ $rs->location }}</td>
                                                <td class="align-middle">{{ $rs->penyulang }}</td>
                                                <td class="align-middle">{{ $rs->keypoint }}</td>
                                                <td class="align-middle">{{ $rs->section }}</td>
                                                <td class="align-middle">{{ $rs->segment }}</td>
                                                <td class="align-middle">{{ $rs->latitude }}</td>
                                                <td class="align-middle">{{ $rs->longitude }}</td>
                                                <td class="align-middle">{{ $rs->spec_fabrication }}</td>
                                                <td class="align-middle">{{ $rs->spec_transtap }}</td>
                                                <td class="align-middle">{{ $rs->spec_voltage }}</td>
                                                <td class="align-middle">{{ $rs->spec_current }}</td>
                                                <td class="align-middle">{{ $rs->spec_year }}</td>
                                                <td class="align-middle">{{ $rs->spec_wiring }}</td>
                                                <td class="align-middle">{{ $rs->spec_mineraloil }}</td>
                                                <td class="align-middle">{{ $rs->spec_cooling_type }}</td>
                                                <td class="align-middle">{{ $rs->spec_oilweight }}</td>
                                                <td class="align-middle">{{ $rs->spec_transweight }}</td>
                                                <td class="align-middle">{{ $rs->test_earth }}</td>
                                                <td class="align-middle">
                                                <div class = "btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('DataAsetGardu.show', $rs->id) }}" type="button" class="btn btn-primary rounded submit px-1 btn-gap" style="background-color: #14A2BA;">Detail</a>
                                                    <a href="{{ route('DataAsetGardu.edit',$rs->id) }}" type="button" class="btn btn-primary rounded submit px-1 btn-gap" style="background-color: #14A2BA;">Edit</a>
                                                    <form action ="{{ route('DataAsetGardu.destroy',$rs->id) }}" method="post" type="button" class="btn btn-primary px-1" style="background-color: #14A2BA;" onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('delete')
                                                    <button class = "btn btn-group btn-primary rounded submit" style="background-color: #14A2BA;">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                            </tr> 
                                            @endforeach
                                            @else
                                            <tr>
                                         <td class="align-middle text-center" colspan="24"> Data Aset Gardu Kosong </td>
                                            </tr>
                                            @endif
                                    </tbody>
                                </table>
                                <script>
                                </script>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-3 mt-auto" style="background-color: #D9D9D9; color: black;">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Anggita-Maya 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('halaman_data_aset/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
