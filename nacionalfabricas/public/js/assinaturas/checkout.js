// checkout.js
document.addEventListener("DOMContentLoaded", () => {
    const stripe = Stripe(window.chavePublica); // Obtém a chave pública do Stripe injetada no layout

    const options = {
        clientSecret: window.chaveSecreta, // Obtém o client secret injetado no layout
        appearance: {
            theme: "stripe",
        },
    };

    // Inicializa o Stripe Elements
    const elements = stripe.elements(options);

    // Cria o Payment Element e monta ele no formulário
    const paymentElement = elements.create("payment");
    paymentElement.mount("#payment-element");

    // Manipula o envio do formulário
    const form = document.getElementById("payment-form");
    form.addEventListener("submit", async (event) => {
        event.preventDefault();

        const { error } = await stripe.confirmPayment({
            elements,
            confirmParams: {
                return_url: `${window.returnUrl}`, // Obtém a URL de retorno do layout
            },
        });

        if (error) {
            const messageContainer = document.querySelector("#error-message");
            messageContainer.textContent = error.message;
        }
    });
});
