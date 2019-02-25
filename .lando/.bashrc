# BEGIN SNIPPET: Platform.sh CLI configuration
HOME=${HOME:-'/var/www'}
export PATH="$HOME/"'.platformsh/bin':"$PATH"
if [ -f "$HOME/"'.platformsh/shell-config.rc' ]; then . "$HOME/"'.platformsh/shell-config.rc'; fi
# END SNIPPET

# Aliases.
alias ls="ls -AFGl --color=auto"
