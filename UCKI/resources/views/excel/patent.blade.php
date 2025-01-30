<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Judul Ciptaan</th>
        <th>Tanggal Permohonan</th>
        <th>Nomor e-Filling (Formalitas)</th>
        <th>Nomor e-Filling (Substantif)</th>
        <th>Pemegang Paten</th>
        <th>Jenis Permohonan</th>
        <th>Nomor Permohonan (Formalitas)</th>
        <th>Nomor Permohonan (Substantif)</th>
        <th>Jumlah Klaim</th>
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
    @foreach($patents as $patent)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $patent->judul_ciptaan }}</td>
            <td>{{ $patent->tanggal_permohonan }}</td>
            <td>{{ $patent->nomor_efilling_f }}</td>
            <td>{{ $patent->nomor_efilling_s }}</td>
            <td>{{ $patent->pemegang_paten }}</td>
            <td>{{ $patent->jenis_permohonan }}</td>
            <td>{{ $patent->nomor_permohonan_f }}</td>
            <td>{{ $patent->nomor_permohonan_s }}</td>
            <td>{{ $patent->jumlah_klaim }}</td>
            @foreach ($lecturers as $lecturer)
                @if ($patent->pencipta_1 == $lecturer->id)
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
                @if ($patent->pencipta_2 == $lecturer->id)
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
                @if ($patent->pencipta_3 == $lecturer->id)
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
                @if ($patent->pencipta_4 == $lecturer->id)
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
                @if ($patent->pencipta_5 == $lecturer->id)
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
                @if ($patent->pencipta_6 == $lecturer->id)
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
                @if ($patent->pencipta_7 == $lecturer->id)
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
                @if ($patent->pencipta_8 == $lecturer->id)
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
                @if ($patent->pencipta_9 == $lecturer->id)
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
                @if ($patent->pencipta_10 == $lecturer->id)
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
