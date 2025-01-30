<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Judul Ciptaan</th>
        <th>Tanggal Permohonan</th>
        <th>Nomor Permohonan</th>
        <th>Pemohon</th>
        <th>Status</th>
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
    @foreach($designs as $design)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $design->judul_ciptaan }}</td>
            <td>{{ $design->tanggal_permohonan }}</td>
            <td>{{ $design->nomor_permohonan }}</td>
            <td>{{ $design->pemohon }}</td>
            <td>{{ $design->status }}</td>
            @foreach ($lecturers as $lecturer)
                @if ($design->pencipta_1 == $lecturer->id)
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
                @if ($design->pencipta_2 == $lecturer->id)
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
                @if ($design->pencipta_3 == $lecturer->id)
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
                @if ($design->pencipta_4 == $lecturer->id)
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
                @if ($design->pencipta_5 == $lecturer->id)
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
                @if ($design->pencipta_6 == $lecturer->id)
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
                @if ($design->pencipta_7 == $lecturer->id)
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
                @if ($design->pencipta_8 == $lecturer->id)
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
                @if ($design->pencipta_9 == $lecturer->id)
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
                @if ($design->pencipta_10 == $lecturer->id)
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
