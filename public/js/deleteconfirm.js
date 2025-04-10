function confirmSweetAlert(event) {
    event.preventDefault();
    Swal.fire({
      title: 'Yakin hapus task ini?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal',
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
    }).then((result) => {
      if (result.isConfirmed) {
        event.target.submit();
      }
    });
    return false;
  }