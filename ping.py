import os

def run_ping():
    ip = input("Enter IP address to ping: ")
    os.system(f"ping {ip}")

run_ping()
