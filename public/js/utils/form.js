export const disableEventSubmit = (formId) => {
    const form = document.getElementById(formId)
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })
}