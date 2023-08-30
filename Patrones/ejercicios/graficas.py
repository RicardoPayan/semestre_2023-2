import numpy as np
import matplotlib.pyplot as plt

# Valores de d_vc como arreglo NumPy
d_vc_values = np.array([1, 2, 10, 100, 200])

# Valores de M desde 1 hasta 100
M_values = np.linspace(0, 1, 100)


fig, ax = plt.subplots()

# Bucle externo: iterar sobre los valores de d_vc
for d_vc in d_vc_values:
    g_values = []  # Lista para almacenar los valores de g para este d_vc
    
    # Bucle interno: iterar sobre los valores de M
    for M in M_values:
        g = M ** d_vc * np.exp(-M)
        g_values.append(g)
    ax.plot(M_values, g_values, label=f'd_vc = {d_vc}')


ax.set_title('Gráfica de la función g(M, d_vc) = M ** d_vc * e ** -M')
ax.set_xlabel('M')
ax.set_ylabel('g(M, d_vc)')



plt.show()
