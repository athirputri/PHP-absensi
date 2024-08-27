<?php include('template/header.php');
$students = [
    [
        "nama" => "Soward",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => "18",
    ],
    [
        "nama" => "Kevin",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => "19",
    ],
    [
        "nama" => "Ujang",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => "16",
    ],
];

$number = 1;
?>

<!-- main content start -->
<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>ABSENSI SISWA</h2>
        <div class="input-group dashboard-filter">
            <button class="input"></button>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-dashed recent-order-table" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Umur</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $student): ?>
                                <tr>
                                    <td><?= $number++ ?></td>
                                    <td><?= $student['nama'] ?></td>
                                    <td><?= $student['kelas'] ?></td>
                                    <td><?= $student['jurusan'] ?></td>
                                    <td><?= $student['umur'] ?></td>
                                    <td>HADIR</td>
                                    <td>
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <div class="table-bottom-control"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('template/footer.php'); ?>