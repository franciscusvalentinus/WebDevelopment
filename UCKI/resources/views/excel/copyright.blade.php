<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Judul Ciptaan</th>
        <th>Tanggal Permohonan</th>
        <th>Nomor Permohonan</th>
        <th>Pemegang Hak Cipta</th>
        <th>Nomor Pencatatan</th>
        <th>Tanggal Penerimaan</th>
        <th>Jenis Ciptaan</th>
        <th>Pencipta 1</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 2</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 3</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 4</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 5</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 6</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 7</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 8</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 9</th>
        <th>Program Studi</th>
        <th>NIDN</th>
        <th>Pencipta 10</th>
        <th>Program Studi</th>
        <th>NIDN</th>
    </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach($copyrights as $copyright)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $copyright->judul_ciptaan }}</td>
            <td>{{ $copyright->tanggal_permohonan }}</td>
            <td>{{ $copyright->nomor_permohonan }}</td>
            <td>{{ $copyright->pemegang_hak_cipta }}</td>
            <td>{{ $copyright->nomor_pencatatan }}</td>
            <td>{{ $copyright->tanggal_penerimaan }}</td>
            @foreach ($creations as $creation)
                @if ($copyright->creation_id == $creation->id)
                    <td>{{ $creation->creation }}</td>
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_1 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_2 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_3 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_4 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_5 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_6 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_7 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_8 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_9 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @foreach ($lecturers as $lecturer)
                @if ($copyright->pencipta_10 == $lecturer->id)
                    @foreach ($departments as $department)
                        @if ($lecturer->department_id == $department->id)
                            <td>{{ $lecturer->name }}</td>
                            <td>{{ $department->department }}</td>
                            <td>{{ $lecturer->nidn }}</td>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
