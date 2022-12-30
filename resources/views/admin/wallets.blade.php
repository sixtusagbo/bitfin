@extends('layouts.admin')

@section('content')
    <div class="accwrap">
        <div class="container mb-3">
            <div class="row">
                <div class="col-lg-3">
                    @include('inc.admin_nav')
                </div>
                <div class="col-lg-9">
                    <div class="member-container">
                        <div class="detailed-stats-box text-light fs-4 mb-4 pb-0 px-3 d-flex justify-content-between">
                            Total Wallets: <p>{{ $wallets->count() }}</p>
                        </div>

                        <div class="table-responsive w-100">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Payments received</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($wallets as $wallet)
                                        <tr>
                                            <td class="item">{{ $wallet->name }} - {{ $wallet->network }}</td>
                                            <td class="item">{{ $wallet->address }}</td>
                                            <td class="item text-center">{{ $wallet->payments->count() }}</td>
                                            <td class="item">
                                                <a href="" data-bs-toggle="modal" class="btn btn-info mb-2 me-2"
                                                    data-bs-target="#editWallet{{ $wallet->id }}">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>

                                        <!-- Edit Wallet Model -->
                                        <div class="modal fade" id="editWallet{{ $wallet->id }}" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title text-primary">Edit {{ $wallet->name }} Wallet
                                                        </h4>
                                                        <a class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <i class="ti-close opacity-10 text-info"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body" id="editWalletModalBody">
                                                        <form class="pt-3" role="form" method="POST"
                                                            action="{{ route('wallets.update', $wallet->id) }}"
                                                            id="editWallet">
                                                            @csrf

                                                            <div class="mb-3">
                                                                <input type="text" class="form-control text-capitalize"
                                                                    value="{{ $wallet->name }}" readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <input type="text" class="form-control" name="address">
                                                            </div>
                                                            <input type="hidden" name="_method" value="PUT">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-md font-weight-medium auth-form-btn">
                                                                    Update Wallet
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--//Edit Wallet-->
                                    @empty
                                        <div class="alert alert-warning" role="alert">
                                            Admin please run your migrations!
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="strip">&nbsp;</div>
    <div class="strip">&nbsp;</div>
@endsection
