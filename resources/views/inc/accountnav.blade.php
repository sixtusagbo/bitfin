<div class="accountnav">
    <div class="welcome"><span class="icon"><img src="{{ asset('images/auth/accountbox1.png') }}" alt=""></span>
        <p>Welcome</p>
        <h4>{{ Auth::user()->username }}</h4>
    </div>
    <div class="action"><a href="{{ url('/deposit') }}">Deposit Now</a></div>
    <div class="action"><a href="{{ url('/withdraw') }}">Withdraw Now</a></div>
    <ul>
        <li class="one"><a href="{{ route('home') }}">Account</a></li>
        <li class="two"><a href="{{ url('/deposit') }}">Deposit now</a></li>
        <li class="three"><a href="{{ url('/deposit_list') }}">Active Deposits</a></li>
        <li class="four"><a href="{{ url('/earnings') }}">History</a></li>
        <li class="five"><a href="{{ url('/referrals') }}">Referrals</a></li>
        <li class="seven"><a href="{{ url('/withdraw') }}">Withdraw</a></li>
        <li class="eight"><a href="{{ url('/profile') }}">Edit</a></li>
    </ul>
</div>