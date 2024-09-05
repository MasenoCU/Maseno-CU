<div class="modal fade" id="comingSoonModal" tabindex="-1" aria-labelledby="comingSoonModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-center" style="border: none; border-radius: 15px; overflow: hidden;">
      <div class="modal-body" style="background-color: #25aae1; color: white; padding: 40px;">
        <h2>Coming Soon!</h2>
        <p class="lead">This feature is under development and will be available soon. Stay tuned!</p>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" >OK</button>
      </div>
    </div>
  </div>
</div>


<script>
document.querySelectorAll('.btn-readmore').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        var myModal = new bootstrap.Modal(document.getElementById('comingSoonModal'));
        myModal.show();
    });
});
</script>
