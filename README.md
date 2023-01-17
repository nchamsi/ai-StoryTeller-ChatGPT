
# ai-StoryTeller-ChatGPT

Symfony webApp utilisant l'API d'OpenAi ChatGPT-3 pour générer des histoires pour enfants.

## API Reference

#### Utilisation de l'API Open-AI PHP

  https://github.com/orhanerday/open-ai

## Demo

http://ai-storyteller.herokuapp.com/
  
Générateur d'une histoire classique pour enfants avec éléments au choix et/ou une histoire alternative par la suite (avec une leçon de vie à la fin).


## Environment Variables

Pour utiliser l'application, vous avez le choix:  
1- Ajouter la variable d'environnement dans un fichier .env.local (en copiant .env) que vous trouverez dans vos paramètres de compte d'Open-AI.

`OPENAI_API_KEY="sk-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"`

ainsi que dans services.yaml
```
parameters:
    OPENAI_API_KEY: '%env(OPENAI_API_KEY)%'
```
  
2- Pour plus de sécurité, crypter la clé de variable d'environnement selon votre usage (local ou prod):
```
APP_ENV=dev php bin/console secrets:set OPEN_API_KEY
ou
APP_ENV=prod php bin/console secrets:set OPEN_API_KEY
```
Cette invitation de commande vous demandera de coller votre clé de manière invisible.
  Si vous voulez vérifier le contenu des variables présentes dans le projet:
```
php bin/console secrets:list --reveal 
```
  A noter: cette commande ne fonctionnera pas si vous n'avez pas ajouté votre propre clé API d'OpenAI.
## Support

Si questions, email jessicakuijer@me.com .
