## ESERCIZIO BOOLSTEAM

- Abbiamo scelto il team leader che è Luca Collaro.
- Abbiamo scelto come strutturare il db (22 campi):
    ## NOME DB: games
    * original_title (not null, varchar 150)
    * title (null, varchar 150,)
    * description (not null, text)
    * developer (not null, varchar 50)
    * publisher (not null, varchar 50)
    * released (not null, tinyint 2)
    * release (not null, date)
    * price (not null, float, 6,2, unsigned)
    * required_space (not null, tinyint) 
    * genres (not null, text)
    * singleplayer (not null, tinyint 2)
    * multiplayer (not null, tinyint 2)
    * local_multiplayer (not null, tinyint)
    * cross_play (not null, tinyint)
    * audio_language (not null, varchar 5)
    * interface_language (not null, varchar 5)
    * dx_version (not null, tinyint)
    * vote (not null, tinyint)
    * pegi (not null, tinyint)
    * ram (not null, tinyint)
    * discount_value (null, tinyint)
    * realese_version (not null, varchar 100)
