<h1 style="text-align: center">Ticket Registration</h1>
<hr>
<div class="container" id="forms">
    <!-- TEMPLATE FORM -->
    <form class="person-form form-inline" style="display:none">
        <div class="form-group">
            <label>Name: </label>
            <input type="text" class="form-control input-name">
        </div>
        <div class="form-group">
            <label>Ticket Type: </label>
            <select class="form-control input-type">
                <option value="normal">Default (Full access, No Discount)</option>
                <option value="student">Student (Full Access, Discount)</option>
                <option value="workshop">Workshop only</option>
                <option value="early" disabled>Early Bird (Expired)</option>
            </select>
        </div>
        <br>
        <div class="checkbox">
            <label>
                <input type="checkbox" class="input-bag" aria-label="..."> Conference Bag - 70€
            </label>
        </div>
        <h2 class="cost" style="text-align: right">+0€</h2><button class="btn btn-default">Remove</button>
        <hr>
    </form>
    <!-- # TEMPLATE FORM -->

</div>
<div class="container">
    <div style="text-align: right">
        <button class="btn btn-primary" id="add">Add Participant</button>
    </div>
</div>
<script src="<?=PUBLIC_ROOT?>/assets/js/tickets.js" defer='defer'></script>
