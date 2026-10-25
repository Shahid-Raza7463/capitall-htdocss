<!--search filter -->

<div class="border rounded mx-3 mt-4">
    <div class="search-bar">
        <p style="margin-right: 9px">Search by Network</p>
        <form class="" action="/affiliate-networks">
            <input type="search" name="search" value="{{ isset($search) ? $search : '' }}" list="search-options"
                placeholder=" Network Name" id="network-input">
            <button type="submit"><i class="fas fa-search"></i></button>
            {{-- <datalist id="search-options">
                <option value="Option 1"></option>
                <option value="Option 2"></option>
                <option value="Option 3"></option>
            </datalist> --}}
            <button type="reset" id="clear-button">Clear</button>
        </form>
    </div>

    {{-- <div class="search-bar">
        <p>Search by Network</p>
        <input type="text" list="search-options" placeholder="Network Name" id="network-input">
        <button type="submit"><i class="fas fa-search"></i></button>
        <datalist id="search-options">
            <option value="Option 1"></option>
            <option value="Option 2"></option>
            <option value="Option 3"></option>
        </datalist>
        <button type="reset" id="clear-button">Clear</button>
    </div> --}}
</div>


<script>
    $(document).ready(function() {
        $('#clear-button').click(function() {
            $('#network-input').val('');
        });
    });
</script>
