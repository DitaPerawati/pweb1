$(document).ready(function () {
  function loadAlumni() {
    $.ajax({
      url: "alumni.php",
      type: "GET",
      success: function (response) {
        const data = JSON.parse(response);
        $("#alumniTableBody").empty();
        data.forEach((alumnus, index) => {
          $("#alumniTableBody").append(`
                        <tr>
                            <td>${alumnus.nim}</td>
                            <td>${alumnus.name}</td>
                            <td>${alumnus.major}</td>
                            <td>${alumnus.year}</td>
                            <td>
                                <button class="btn btn-danger btn-sm deleteBtn" data-index="${index}">Hapus</button>
                            </td>
                        </tr>
                    `);
        });
      },
    });
  }
  $("#alumniForm").on("submit", function (event) {
    event.preventDefault();
    const formData = $(this).serialize();
    $.ajax({
      url: "alumni.php",
      type: "POST",
      data: formData,
      success: function (response) {
        alert("Data berhasil ditambahkan!");
        $("#alumniForm")[0].reset();
        loadAlumni();
      },
    });
  });
  $(document).on("click", ".deleteBtn", function () {
    const index = $(this).data("index");
    $.ajax({
      url: "alumni.php",
      type: "DELETE",
      data: { index: index },
      success: function (response) {
        alert("Data berhasil dihapus!");
        loadAlumni();
      },
    });
  });
  loadAlumni();
});
