@component('mail::message')
# Website Contact

- {{ $request->name }}
- {{ $request-> email }}
- {{ $request->phone }}

@component('mail::panel', ['url' => ''])
	{{ $request->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
