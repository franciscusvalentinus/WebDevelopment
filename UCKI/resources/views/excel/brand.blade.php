<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Merek</th>
        <th>Tanggal Permohonan</th>
        <th>Nomor Permohonan</th>
        <th>Kelas</th>
        <th>Jenis Merek</th>
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
    @foreach($brands as $brand)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $brand->merek }}</td>
            <td>{{ $brand->tanggal_permohonan }}</td>
            <td>{{ $brand->nomor_permohonan }}</td>
            <td>{{ $brand->kelas }}</td>
            <td>{{ $brand->jenis_merek }}</td>
            <td>{{ $brand->status }}</td>
            @foreach ($lecturers as $lecturer)
                @if ($brand->pencipta_1 == $lecturer->id)
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
                @if ($brand->pencipta_2 == $lecturer->id)
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
                @if ($brand->pencipta_3 == $lecturer->id)
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
                @if ($brand->pencipta_4 == $lecturer->id)
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
                @if ($brand->pencipta_5 == $lecturer->id)
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
                @if ($brand->pencipta_6 == $lecturer->id)
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
                @if ($brand->pencipta_7 == $lecturer->id)
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
                @if ($brand->pencipta_8 == $lecturer->id)
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
                @if ($brand->pencipta_9 == $lecturer->id)
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
                @if ($brand->pencipta_10 == $lecturer->id)
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
