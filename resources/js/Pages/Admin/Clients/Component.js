import { t } from '@/Lang/i18n';
import { hasPermission } from '@/rolePermission.js';

// Obtener ruta
const goTo = (route) => `admin.clients.${route}`
// Obtener traducción del componente
const transl = (lang) => t(`clients.${lang}`)
// Determina si un usuario puede hacer algo no en base a los permisos
const can = (permission) => hasPermission(`clients.${permission}`)

export {
    can,
    goTo,
    transl
}