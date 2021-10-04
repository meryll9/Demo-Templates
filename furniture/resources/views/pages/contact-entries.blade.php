@extends('layout.main')

@section('content')
    <!-- Content
		============================================= -->
		<section id="content">

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Services</th>
                    <th>Message</th>
                </tr>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->services }}</td>
                    <td>{{ $contact->message }}</td>
                </tr>
                @endforeach
            </table>

		</section><!-- #content end -->
@endsection
