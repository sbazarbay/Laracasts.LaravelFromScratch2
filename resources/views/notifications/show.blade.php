@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Payments Dashboard') }}</div>

                <div class="card-body">
                @forelse($notifications as $notification)
                    <li>
                    @if($notification->type == 'App\Notifications\PaymentReceived')
                        We have received a payment of ${{ $notification->data['amount'] / 100}} from you.
                    @endif    
                    </li>
                @empty
                    <li>You have no unread notifications at this time.</li>
                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
