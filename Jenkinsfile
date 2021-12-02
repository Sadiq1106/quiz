pipeline {
	agent any
	stages {
		stage('Checkout SCM') {
			steps {
				git 'https://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@github.com/Sadiq1106/quiz'
			}
		}

		stage('OWASP DependencyCheck') {
			steps {
				dependencyCheck additionalArguments: '--format HTML --format XML', odcInstallation: 'Default'
			}
		}
	}	
	post {
		success {
			dependencyCheckPublisher pattern: 'dependency-check-report.xml'
		}
	}
}
