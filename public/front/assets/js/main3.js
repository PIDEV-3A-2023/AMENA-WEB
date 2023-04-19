window.onload = () => {
    const ReservationForm = document.querySelector("#reservation-form"); 
    const dateDebInput = document.querySelector(".reservation-datedeb");
    const dateFinInput = document.querySelector(".reservation-datefin");

    const updatePrixElement = () => {
        const dateDebValue = dateDebInput.value;
        const dateFinValue = dateFinInput.value;

        if (dateDebValue && dateFinValue) {
            const dateDeb = new Date(dateDebValue);
            const dateFin = new Date(dateFinValue);

            const diffTime = Math.abs(dateFin - dateDeb);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            var prixElement = document.querySelector('.js-prix');
            const prix = prixElement.getAttribute('data-prix');

            prixElement.textContent = parseFloat(prix) * diffDays + "dt";
        }
    }

    dateFinInput.addEventListener("change", updatePrixElement);

    dateDebInput.addEventListener("change", updatePrixElement);
};
