PGP

Script to send pgp files

made this because i saw mocro maffia :)

just change "gpg -> encrypt("Change here!");"

- PGP(Pretty Good Privacy) is a product and trademark of Symantec Corporation.
- OpenPGP is the standard used by PGP.
- GnuPG (Gnu Privacy Huard) is a free and open source implementation of PGP.i

At first, import the key, where $keydata is the ASCII armored public key. Then us the key to encrypt the data,
this time using the clients's fingerprint.

if you want to encrypt files, read and pass them to encrypt(). Be sure to use at least long key IDs, better fingerprints when referencing keys; and never use short key IDs, as those are vulnerable to collision attacks.
