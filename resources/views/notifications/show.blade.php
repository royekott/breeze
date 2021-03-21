@extends('layout')

@section('content')
    <div class="wrapper">
        <ul>
            @forelse($notifications as $notification)
                <li>
                    @if($notification->type === 'App\Notifications\PaymentReceived')
                        We have received a payment of ${{ $notification->data['amount'] /100}} from you.
                    @endif
                </li>
                @empty
                <li>Toy have no unread notifications.</li>
            @endforelse
        </ul>
    </div>
@endsection
