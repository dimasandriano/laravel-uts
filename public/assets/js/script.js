const Modal = document.getElementById('modal')
Modal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const title = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = Modal.querySelector('.modal-title')

  modalTitle.textContent = `${title}`
  const aksi = document.getElementById('aksi')
  aksi.textContent = title
})