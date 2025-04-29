<x-mail::message>

# Bienvenido a Itver-Forms

## ¡Es necesario que confirmes tu correo electrónico!

Las cuentas no verificadas son eliminadas 3 días después de su creación.

<x-mail::button :url="route('verification.notice')" color="success">
Confirmar cuenta
</x-mail::button>

<x-mail::panel>
Si no creaste esta cuenta, puedes ignorar este mensaje.
</x-mail::panel>

</x-mail::message>
