<?php
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Users
{
    /**
     * Notify the user that the sent [passport](https://core.telegram.org/passport) data contains some errors The user will not be able to re-submit their Passport data to you until the errors are fixed (the contents of the field for which you returned the error must change).
     * 
     * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
     *
     * @param array $id The user @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * @param array $errors Errors @see https://docs.madelineproto.xyz/API_docs/types/array.html
     * 
     *
     * @return array
     */
    public function setSecureValueErrors(array $id, array $errors);
}
