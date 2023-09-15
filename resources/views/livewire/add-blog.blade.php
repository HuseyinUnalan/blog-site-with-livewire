<div class="container mt-5">
    <select id="selectField" class="form-control">
        <option value="" selected>Seçim Yapın</option>
        <option value="baslik">Başlık</option>
        <option value="aciklama">Açıklama</option>
        <option value="gorunum">Görsel</option>
    </select>

    <div id="inputContainer"></div>
</div>

<script>
    const selectField = document.getElementById("selectField");
    const inputContainer = document.getElementById("inputContainer");

    selectField.addEventListener("change", function() {
        const selectedOption = selectField.value;

        const newInput = document.createElement("div");
        newInput.className = "form-group";

        if (selectedOption === "baslik") {
            newInput.innerHTML = '<input type="text" class="form-control" placeholder="Başlık">';
        } else if (selectedOption === "aciklama") {
            newInput.innerHTML =
                '<textarea cols="30" rows="5" class="form-control" placeholder="Açıklama"></textarea>';
        } else if (selectedOption === "gorunum") {
            newInput.innerHTML =
                '<input type="file" class="form-control" accept="image/*" placeholder="Görsel Seçin">';
        }

        inputContainer.appendChild(newInput);
    });
</script>
